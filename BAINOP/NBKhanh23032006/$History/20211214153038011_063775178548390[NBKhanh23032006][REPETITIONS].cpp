#include <bits/stdc++.h>

using namespace std;
int main()
{
    freopen("REPETITIONS.int","r",stdin);
    freopen("REPETITIONS.out","w",stdout);
    string s;
    cin>>s;
    s=s+'x';
    int tl=1;
    for (int i=1, a=1;i<(int)s.size();i++)
    {
        if(s[i]==s[i-1])
            a++;
        else{
            tl=max(tl,a);
        a=1;
    }

}
cout<<tl;
}
