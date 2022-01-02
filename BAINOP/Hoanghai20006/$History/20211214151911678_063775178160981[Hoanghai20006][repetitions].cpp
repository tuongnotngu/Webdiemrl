#include<bits/stdc++.h>

using namespace std;

int main(){
    freopen("repetitions.inp", "r", stdin);
    freopen("repetitions.out", "w", stdout);
    vector<long long>b;
    string a;
    getline(cin, a);
    long long n = a.length(), dem = 1;
    for(long long i = 1; i<n; i++)
    {
        if(a[i] == a[i-1])
            dem = dem + 1;
        else{
            b.push_back(dem);
            dem = 1;
        }
    }
    long long ma = b[0];
    for(long long i = 1; i<b.size(); i++)
    {
        if(b[i]>ma)
            ma = b[i];
        else ma = ma;
    }
    if(ma<dem) ma =dem;
    cout << ma;

}
