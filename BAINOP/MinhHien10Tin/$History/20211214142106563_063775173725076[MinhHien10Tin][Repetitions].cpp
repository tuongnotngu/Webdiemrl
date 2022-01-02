#include <bits/stdc++.h>
#include <string>
using namespace std;
using std::string;
#define lli long long int
lli length[100000000]={};
int main(){

    if (fopen ("repetitions.inp","r")){
        freopen ("repetitions.inp","r",stdin);
        freopen ("repetitions.out","w",stdout);
    }
    string s;
    cin>>s;

    for (int i=0;i<s.size();i++){
            length[i]=0;
       for (int j=0;j<s.size();j++) {
         if (s[i]==s[j]) length[i]=length[i]+1;
       }
    }

    lli maxx=0;
    for (int i=0;i<s.size();i++)
        maxx=max(length[i], maxx);
    cout<<maxx;
}
